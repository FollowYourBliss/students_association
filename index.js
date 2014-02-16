var App = Ember.Application.create();

App.TimeOnPageComponent = Em.Component.extend({
  msViewed: 0,
  
  secondsViewed: function () {
    return Math.round(this.get('msViewed')/1000);
  }.property('msViewed'),
  
  oldTime: null,
  
  newTime: null,
  
  startTimer: function() {
    setInterval(function() {
      var newTime = Date.now()
        , oldTime = this.get('oldTime') || Date.now()
        , deltaMs = newTime - oldTime;
      
      this.incrementProperty('msViewed', deltaMs);
  
      this.set('oldTime', newTime);
    }.bind(this), 1000);
  }.on('didInsertElement')
  
});
