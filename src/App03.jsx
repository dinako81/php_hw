// 3.	Sukurti komponentą rodantį tekstą h1 tage- “Zebrai ir Bebrai”, kuris gauna vieną props, kuris lygus 1 arba 2. Jeigu props lygus 1 tekstas nudažomas mėlynai, o jeigu 2 - raudonai.
import "./App.scss";
import "bootstrap/dist/css/bootstrap.min.css";
import Uzd03 from "./Components/React base/Uzd03";

function App3({ value }) {
  return (
    <div className="App">
      <header className="App-header">
        <Uzd03 color={"blue"} />
      </header>
    </div>
  );
}

export default App3;
