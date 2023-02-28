// 5.	Sukurti komponentą, kuris gauna tris props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage, o trečias yra spalva, kuria nudažomi abu tekstai.
import "bootstrap/dist/css/bootstrap.min.css";
import { useState } from "react";
import "./App.scss";
import randColor from "./Functions/randColor";
import { v4 as uuidv4 } from "uuid";

import "./App.scss";
import "bootstrap/dist/css/bootstrap.min.css";
import Uzd04 from "./Components/React base/Uzd04";

function App5({ value }) {
  return (
    <div className="App">
      <header className="App-header">
        <Uzd04 />
      </header>
    </div>
  );
}

export default App5;
