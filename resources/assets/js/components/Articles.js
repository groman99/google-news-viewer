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

        var $wrappers = $(item).find('td');
        var $imageWrapper = $wrappers.eq(0);
        var $descriptionWrapper = $wrappers.eq(1);

        //remove image column if there is no image
        if (!$imageWrapper.children().length) {
            $(item).addClass('no-image');
        }

        //remove link to more related news
        $descriptionWrapper.find('a:last').remove();

        //identify article title
        $descriptionWrapper.find('a:first').addClass('title');

    });
};

module.exports = Articles;