var $ = require('jquery');

function Articles($container){
    
    this.$collection = $container.find('article')
        .on('click', 'a', this.handleClick);
};

Articles.prototype.handleClick = function(e){
    
    e.preventDefault();
    window.open($(this).prop('href'));
};

Articles.prototype.cleanDefaultHTML = function(){
    
    this.$collection.each(function(i, item){

        var $imageWrapper = $(item).find('td').eq(0);

        //remove image column if there is no image
        if (!$imageWrapper.children().length) {
            $imageWrapper.remove();
        }

        //remove link to more related news
        $(item).find('a:last').remove();

    });
};

module.exports = Articles;