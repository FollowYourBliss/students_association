(function() {

// Handlebars helper to generate lorem ipsum text
Ember.Handlebars.registerHelper('lorem', function(options) {
  var opts = {ptags:true}
  if(options.hash.type) {
    opts.type = options.hash.type;
  }
  if(options.hash.amount) {
    opts.amount = options.hash.amount;
  }
  return new Handlebars.SafeString($('<div></div>').lorem(opts).html());
});

// A helper function to define routes for better code reuse
function sectionRoute(name) {
  return Ember.Route.extend({
    route: name,
    connectOutlets: function(router, context) {
      var SectionView = Ember.View.extend({
        templateName: 'section' + name
      });
      router.get('sectionsController').connectOutlet({viewClass: SectionView});
    }
  });
}

// A helper function to define a property used to render the navigation. Returns
// true if a state with the specified name is somewhere along the current route.
function stateFlag(name) {
  return Ember.computed(function() {
    var state = App.router.currentState;
    while(state) {
      if(state.name === name) return true;
      state = state.get('parentState');
    }
    return false;
  }).property('App.router.currentState');
}

// Create the application
window.App = Ember.Application.create({

  // Define the main application controller. This is automatically picked up by
  // the application and initialized.
  ApplicationController: Ember.Controller.extend({
    isHome: stateFlag('home'),
    isSections: stateFlag('sections'),
    isItems: stateFlag('items'),
    isGallery: stateFlag('gallery'),
    isActivity: stateFlag('activity'),
    isNews: stateFlag('news'),
    isMeetings: stateFlag('meetings'),
    isAboutus: stateFlag('aboutus'),
    isConntact: stateFlag('conntact')
  }),
  ApplicationView: Ember.View.extend({
    templateName: 'application',
    didInsertElement: function(){
      this._super();
      console.log("Koko");
      this.$(document).foundation()
    }
  }),

  HomeController: Ember.Controller.extend(),
  HomeView: Ember.View.extend({
    templateName: 'home'
  }),

  GalleryController: Ember.Controller.extend(),
  GalleryView: Ember.View.extend({
    templateName: 'gallery'
  }),

  ActivityController: Ember.Controller.extend(),
  ActivityView: Ember.View.extend({
    templateName: 'activity'
  }),

  NewsController: Ember.Controller.extend(),
  NewsView: Ember.View.extend({
    templateName: 'news'
  }),

  MeetingsController: Ember.Controller.extend(),
  MeetingsView: Ember.View.extend({
    templateName: 'meetings'
  }),

  AboutusController: Ember.Controller.extend(),
  AboutusView: Ember.View.extend({
    templateName: 'aboutus'
  }),

  ConntactController: Ember.Controller.extend(),
  ConntactView: Ember.View.extend({
    templateName: 'conntact'
  }),


  SectionsController: Ember.Controller.extend({
    isSectionA: stateFlag('sectionA'),
    isSectionB: stateFlag('sectionB'),
    isSectionC: stateFlag('sectionC'),
    isSectionD: stateFlag('sectionD')
  }),
  SectionsView: Ember.View.extend({
    templateName: 'sections'
  }),

  ItemsController: Ember.ArrayController.extend({
    init: function() {
      this._super();
      var items = [];
      for(var i = 0; i < 10; i++) {
        var description = $('<div></div>').lorem({ptags:true}).html();
        items.push({id: i, title: 'Item ' + i, description: description});
      }
      this.set('content', Ember.A(items));
    }
  }),
  ItemsView: Ember.View.extend({
    templateName: 'items'
  }),

  ItemController: Ember.ObjectController.extend(),
  ItemView: Ember.View.extend({
    templateName: 'item'
  }),

  Router: Ember.Router.extend({
    root: Ember.Route.extend({
      doHome: function(router, event) {
        router.transitionTo('home');
      },
      doSections: function(router, event) {
        router.transitionTo('sections.index');
      },
      doItems: function(router, event) {
        router.transitionTo('items.index');
      },
      doGallery: function(router, event){
        router.transitionTo('gallery');
      },
      doAboutus: function(router, event) {
        router.transitionTo('aboutus');
      },
      doMeetings: function(router, event) {
        router.transitionTo('meetings');
      },
      doConntact: function(router, event) {
        router.transitionTo('conntact');
      },
      doNews: function(router, event){
        router.transitionTo('news');
      },
      doActivity: function(router, event){
        router.transitionTo('activity');
      },
      home: Ember.Route.extend({
        route: '/',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('home');
        }
      }),
      activity: Ember.Route.extend({
        route: '/activity',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('activity');
        },
        activity: Ember.Route.extend({
          route: '/:activity_id',
          connectOutlets: function(router, context) {
            var item = context.activity_id;
            console.log(item);
            router.get('applicationController').connectOutlet(item);
          }
        })
      }),
      aboutus: Ember.Route.extend({
        route: '/aboutus',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('aboutus');
        }
      }),
      meetings: Ember.Route.extend({
        route: '/meetings',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('meetings');
        }
      }),
      conntact: Ember.Route.extend({
        route: '/conntact',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('conntact');
        }
      }),
      gallery: Ember.Route.extend({
        route: '/gallery',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('gallery');
        }
      }),
      news: Ember.Route.extend({
        route: '/news',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('news');
        }
      }),
      sections: Ember.Route.extend({
        route: '/sections',
        connectOutlets: function(router, event) {
          router.get('applicationController').connectOutlet('sections');
        },
        index: Ember.Route.extend({
          route: '/',
        }),
        doSectionA: function(router, event) { router.transitionTo('sections.sectionA'); },
        sectionA: sectionRoute('A'),
        doSectionB: function(router, event) { router.transitionTo('sections.sectionB'); },
        sectionB: sectionRoute('B'),
        doSectionC: function(router, event) { router.transitionTo('sections.sectionC'); },
        sectionC: sectionRoute('C'),
        doSectionD: function(router, event) { router.transitionTo('sections.sectionD'); },
        sectionD: sectionRoute('D')
      }),
      items: Ember.Route.extend({
        route: '/items',
        index: Ember.Route.extend({
          route: '/',
          connectOutlets: function(router, context) {
            router.get('applicationController').connectOutlet('items');
          }
        }),
        item: Ember.Route.extend({
          route: '/:item_id',
          connectOutlets: function(router, context) {
            var item = router.getPath('itemsController.content').objectAt(context.item_id);
            router.get('itemController').set('content', item);
            router.get('applicationController').connectOutlet('item');
          }
        }),
        doItem: function(router, event) {
          router.transitionTo('item', {item_id: event.context.id});
        }
      })
    })
  })

});

$(function() {
App.initialize();
});

})();
