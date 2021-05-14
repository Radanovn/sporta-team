
var mobileSubMenus = function (target, sourceSelector, title, isMega){
    var root = mw.element('<div class="submenu" />');
    var content = mw.element('<div class="submenu-wrap" />');
    root.append(content);
    var header = mw.element('<div class="submenu-header"><div class="btn-close-submenu">back</div><div class="submenu-title">' + title + '</div></div>')
    content.append(header);
    var ul = mw.element('<ul class="navbar-nav w-100"/>');
    $(sourceSelector).find('.dropdown-item').each(function (){
        var sub = $(this).next('ul');
        var hasChild = !!sub.length;
        var wrap;
        if(sub.length) {
            sub = sub.clone()
            sub.attr('class', 'navbar-nav w-100')
            sub.find('li').attr('class', 'nav-item')
            sub.find('ul')
                .attr('class', 'navbar-nav w-100')
                .wrap('<div class="submenu"><div class="submenu-wrap"></div></div>')
                .before('<div class="submenu-header"><div class="btn-close-submenu">back</div><div class="submenu-title">'+this.innerHTML+'</div></div>')

            sub.find('a').attr('class', 'nav-link')
            wrap = mw.element('<div class="submenu" />');
            var wrapcontent = mw.element('<div class="submenu-wrap" />');
            wrap.append(wrapcontent);
            var wrapheader = mw.element('<div class="submenu-header"><div class="btn-close-submenu">back</div><div class="submenu-title">' + title + '</div></div>')
            wrapcontent.append(wrapheader);
            wrapcontent.append(sub.get(0));
        }
        ul.append(mw.element({
            tag: 'li',
            props: {
                className: 'nav-item' + (hasChild ? ' has-submenu' : '')
            },
            content: [
                mw.element({
                    tag: 'a',
                    props: {
                        className: 'nav-link'  + (hasChild ? ' submenu-toggle' : ''),
                        href: this.href,
                        innerHTML: this.innerHTML
                    }
                }),
                (wrap ? wrap : '')
            ]
        }))
        ul.find('.dropdown-item__icon').remove()
    });
    content.append(ul);
    target.appendChild(root.get(0));
}

$(document).ready(function (){

    var mobilemenu = mw.element('ul#main-mobile-menu');

    $('#navbarBottom > ul > li').each(function (){
        var link = this.querySelector('a');
        var li = mw.element({
            tag: 'li',
            props: {
                className: 'nav-item has-submenu',
            },
            content: {
                tag:'a',
                props: {
                    className: 'nav-link submenu-toggle',
                    innerHTML: link.innerHTML
                }
            }
        });
        mobileSubMenus(li.get(0), link.nextElementSibling, link.innerHTML, false)
        mobilemenu.append(li.get(0))
    })
});

