import React, { useContext } from "react";
import GlobalContext from "../store/GlobalContext";
import Navigation from "./Navigation";

const Footer = () => {
  const globalCtx = useContext(GlobalContext);

  const footer = globalCtx.footer;

  return (
    <footer>
      Footer
    </footer>
  )
}

export default Footer;