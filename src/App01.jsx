// 1.	Sukurti komponentą, kuris užrašytų “LABAS, ZUIKI!”. Raidžių spalva pink. Spalva tekstui nurodoma komponento viduje naudojant style

import "./App.scss";
import Zuikis from "./Components/React base/Zuikis";

function App() {
  return (
    <div className="App">
      <header className="App-header">
        <Zuikis />
      </header>
    </div>
  );
}

export default App;
