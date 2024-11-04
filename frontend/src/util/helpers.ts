export const onLoadScrollHandler = (sectionEl: any) => {
  let bounding = sectionEl.current?.getBoundingClientRect();

  if( bounding && bounding.top <= window.innerHeight && bounding.bottom > 0 ) {
    sectionEl.current?.classList.add('on-screen');
  }
}

export const scrollHandler = ( sectionEl: any ) => {
  let bounding = sectionEl.current?.getBoundingClientRect();

  if( bounding && bounding.top <= window.innerHeight && bounding.bottom > 0 ) {
    if( bounding.top < window.innerHeight-(bounding.height/2) ) {
      sectionEl.current?.classList.add('on-screen');
    }
  }
}
