import React, { useContext } from "react";
import GlobalContext from "../store/GlobalContext";

const Header = () => {
  const globalCtx = useContext(GlobalContext);

  const header = globalCtx.global.header;

  return (
    <header>
      Header
    </header>
  )
}

export default Header;