import ParentComponent from "./components/ParentComponent";

import "./App.css";
import Counter from "./components/Counter";
import FocusInput from "./components/FocusInput";
import HookTimer from "./components/HookTimer";

function App() {
  return (
    <div className="App">
      {/* <ParentComponent /> */}
      {/* <Counter /> */}
      {/* <FocusInput /> */}
      <HookTimer />
    </div>
  );
}

export default App;
