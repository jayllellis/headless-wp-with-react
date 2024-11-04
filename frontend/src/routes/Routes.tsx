import { Routes, Route } from 'react-router-dom';

import Page from "../pages/Page";
import NotFound from "../pages/NotFound";

const AppRoutes = () => {

  return (
    <Routes>
      <Route path="/" element={<Page slug="home" />} />
      {/* { routeList } */}
      <Route path="*" element={<NotFound />} />
    </Routes>
  );
}

export default AppRoutes;