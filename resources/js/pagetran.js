import barba from '@barba/core';

barba.init({
  transitions: [{
    name: 'home',
    leave(data) {
        console.log('leave')
      // create your stunning leave animation here
      return gsap.to(data.current.container, {
        opacity: 0
      });
    },
    enter(data) {
        console.log('enter')
      // create your amazing enter animation here
      return gsap.from(data.next.container, {
        opacity: 0
      });
    }
  }]
});
