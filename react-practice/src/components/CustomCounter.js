import React from "react";
import useCounter from "../hooks/useCounter";

function CustomCounter() {
  const [count, increment, decrement, reset] = useCounter(0, 5);
  return (
    <>
      <h2>Count = {count}</h2>
      <button onClick={increment}>Increment</button>
      <button onClick={decrement}>Decrement</button>
      <button onClick={reset}>Reset</button>
    </>
  );
}

export default CustomCounter;
