import { useContext } from "react";
import { Link } from "react-router-dom";
import GlobalContext from "../store/GlobalContext";

const NotFound = () => {
  const globalCtx = useContext(GlobalContext);
  const header = globalCtx.global.header;

  return (
    <div className="bg-white min-h-screen flex items-center">
      <div className="container mx-auto px-5 py-24 text-center">
        <Link
          to="/" 
          className="w-64 min1578px:w-96 block mx-auto hover:opacity-80 mb-12"
        >
          <img alt="logo" src={header.logo[0]} className="block max-w-full" />
        </Link>
        <h2 className="font-bold text-2xl md:text-4xl mb-12">Error 404</h2>
        <p className="text-xs md:text-sm font-medium mt-2">Sorry - the page you're looking for can't be found or is no longer available.</p>
      </div>
    </div>
  );
}

export default NotFound;
