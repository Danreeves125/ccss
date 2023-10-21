let windowWidth = window.innerWidth;

if(document.querySelector('.page__sticky')) {
    var sidebar = new StickySidebar('.page__sticky', {
        containerSelector: '.page__content-wrapper',
        innerWrapperSelector: '.page__sticky-inner',
        topSpacing: 140,
    });

    window.addEventListener('resize', () => {
        if(windowWidth > 640) {
            sidebar.updateSticky();
        } else {
            sidebar.destroy();
        }
    });
}
