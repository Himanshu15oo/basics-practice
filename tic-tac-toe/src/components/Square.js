import React from "react";

import "./squareStyles.css";
function Square({ square, onSquareClick }) {
  return (
    <div className="square">
      <button onClick={onSquareClick}>{square}</button>
    </div>
  );
}

export default Square;
