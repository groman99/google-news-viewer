var $ = require('jquery');
var Articles = require('./Articles')

function App(){
    
    this.$container = $('#application');
    this.articles = new Articles(this.$container);
    this.articles.cleanDefaultHTML();
};



module.exports = new App();