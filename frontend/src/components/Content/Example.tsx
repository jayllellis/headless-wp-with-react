import { useEffect, useRef } from "react";
import {
  onLoadScrollHandler,
  scrollHandler as globalScrollHandler
} from "../../util/helpers";

const Example = (props: any) => {
  const sectionEl = useRef<HTMLElement>(null);

  useEffect(() => {
    onLoadScrollHandler(sectionEl);// add 'on-screen' class on load if section in view

    // add 'on-screen' class when user scrolls to section
    const scrollHandler = () => { return globalScrollHandler(sectionEl) };

    window.addEventListener('scroll', scrollHandler);
    return () => window.removeEventListener('scroll', scrollHandler);
  }, []);

  return (
    <section ref={sectionEl}>
      <h1>Example</h1>
    </section>
  );
}

export default Example;
