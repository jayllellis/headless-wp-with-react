import React, { useEffect, useState, useContext } from "react";
import axios from "axios";

import GlobalContext from "../store/GlobalContext";
import Header from "../components/Header";
import Footer from "../components/Footer";

import HeroSection from "../components/Content/HeroSection";
import ContentTile from "../components/Content/ContentTile";

const Page = (props: any) => {
  const globalCtx = useContext(GlobalContext);
  const [pageData, setPageData] = useState() as any;

  useEffect(() => {
    axios.get(`${globalCtx.apiUrl}/pages/single?slug=${props.slug}`)
    .then( response =>  {
      setPageData(response.data);
      window.scrollTo(0, 0);
    })
    .catch( error => {
      console.error(error);
    });
  }, [props.slug]);

  const pageContent = pageData && pageData.page_content && pageData.page_content.length > 0 && pageData.page_content.map( (content: any, index: any) => 
    (
      content.content_type === 'hero_section' ?
        <HeroSection key={content.component_id} data={content} />
		  : content.content_type === 'content_tile' ?
        <ContentTile key={content.component_id} />
      : null
    )
  );

  return (
    <>
      {<Header data={globalCtx.global.header} />}
      {{ pageContent }}
      <div>The app works! Delete this and start editing.</div>
      {<Footer data={globalCtx.global.footer} />}
    </>
  );
}

export default Page;
