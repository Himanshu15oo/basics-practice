import { useState } from "react";

function useCounter(initialState = 0, step = 1) {
  const [count, setCount] = useState(initialState);

  const increment = () => {
    setCount((prevCount) => prevCount + step);
  };
  const decrement = () => {
    setCount((prevCount) => prevCount - step);
  };
  const reset = () => {
    setCount(initialState);
  };

  return [count, increment, decrement, reset];
}

export default useCounter;
