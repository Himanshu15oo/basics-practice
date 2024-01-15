import React, { useState, useMemo } from "react";

function Counter() {
  const [counterOne, setCounterOne] = useState(0);
  const [counterTwo, setCounterTwo] = useState(0);

  const incrementOne = () => {
    setCounterOne(counterOne + 1);
  };

  const incrementTwo = () => {
    setCounterTwo(counterTwo + 1);
  };

  const isEven = useMemo(() => {
    let i = 0;
    while (i < 2000000000) {
      i++;
    }
    return counterOne % 2 === 0;
  }, [counterOne]);

  return (
    <>
      <button onClick={incrementOne}>Counter one - {counterOne}</button>
      <label>{isEven ? "Even" : "Odd"}</label>
      <button onClick={incrementTwo}>Counter two - {counterTwo}</button>
    </>
  );
}

export default Counter;
