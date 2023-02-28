// 4.	Sukurti komponentą, kuris gauna du props. Vienas props bet koks tekstas, kuris komponente atvaizduojamas h1 tage, o antras bet koks tekstas kuris atvaizduojamas h2 tage.

import "./App.scss";
import "bootstrap/dist/css/bootstrap.min.css";
import Uzd04 from "./Components/React base/Uzd04";

function App4({ value }) {
  return (
    <div className="App">
      <header className="App-header">
        <Uzd04 />
      </header>
    </div>
  );
}

export default App4;
