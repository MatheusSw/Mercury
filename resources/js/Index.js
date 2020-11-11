import React from "react";
import ReactDOM from "react-dom";

import Example from "./components/Example";

const rootElement = document.getElementById("root");
ReactDOM.render(
    <React.StrictMode>
        <Example />
    </React.StrictMode>,
    rootElement
);
