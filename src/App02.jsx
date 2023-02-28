// 2.	Sukurti komponentą, kuris gauną vieną props. Props yra bet koks tekstas, kuris komponente atvaizduojamas h1 tage.
import "./App.scss";
import Uzd02 from "./Components/React base/Uzd02";

function App2() {
  return (
    <div className="App">
      <header className="App-header">
        <Uzd02 text="jsgadhafaja" />
      </header>
    </div>
  );
}

export default App2;
