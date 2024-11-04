import React, { useState } from 'react';

const GlobalContext = React.createContext({} as any);

export const GlobalContextProvider = (props: any) => {
  const [globalContent, setGlobalContent] = useState() as any;

  return (
    <>
    {
      <GlobalContext.Provider value={globalContent}>
        {props.children}
      </GlobalContext.Provider>
    }
    </>
  );
};

export default GlobalContext;