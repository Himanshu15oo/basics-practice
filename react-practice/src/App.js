import ParentComponent from "./components/ParentComponent";

import "./App.css";
import Counter from "./components/Counter";
import FocusInput from "./components/FocusInput";
import HookTimer from "./components/HookTimer";
import DocTitleOne from "./components/DocTitleOne";
import DocTitleTwo from "./components/DocTitleTwo";

function App() {
  return (
    <div className="App">
      {/* <ParentComponent /> */}
      {/* <Counter /> */}
      {/* <FocusInput /> */}
      {/* <HookTimer /> */}
      <DocTitleOne />
      <DocTitleTwo />
    </div>
  );
}

export default App;
