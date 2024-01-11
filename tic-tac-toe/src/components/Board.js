import { useState, React } from "react";
import Square from "./Square";

import "./boardStyles.css";

function Board({ xIsNext, squares, onPlay }) {
  function handleClick(index) {
    if (calculateWinner(squares) || squares[index]) {
      return;
    }
    const nextSquare = squares.slice();
    nextSquare[index] = xIsNext ? "X" : "O";
    onPlay(nextSquare);
  }

  const winner = calculateWinner(squares);
  let status;
  if (winner) {
    status = "Winner : " + winner;
    console.log("Winner decided");
  } else {
    status = "Next chance : " + (xIsNext ? "X" : "O");
  }
  return (
    <div>
      <div className="status">{status}</div>
      <div className="board-row">
        <Square square={squares[0]} onSquareClick={() => handleClick(0)} />
        <Square square={squares[1]} onSquareClick={() => handleClick(1)} />
        <Square square={squares[2]} onSquareClick={() => handleClick(2)} />
      </div>
      <div className="board-row">
        <Square square={squares[3]} onSquareClick={() => handleClick(3)} />
        <Square square={squares[4]} onSquareClick={() => handleClick(4)} />
        <Square square={squares[5]} onSquareClick={() => handleClick(5)} />
      </div>
      <div className="board-row">
        <Square square={squares[6]} onSquareClick={() => handleClick(6)} />
        <Square square={squares[7]} onSquareClick={() => handleClick(7)} />
        <Square square={squares[8]} onSquareClick={() => handleClick(8)} />
      </div>
    </div>
  );
}

function calculateWinner(squares) {
  const lines = [
    [0, 1, 2],
    [3, 4, 5],
    [6, 7, 8],
    [0, 3, 6],
    [1, 4, 7],
    [2, 5, 8],
    [0, 4, 8],
    [2, 4, 6],
  ];

  for (const line of lines) {
    const [a, b, c] = line;
    if (squares[a] && squares[a] === squares[b] && squares[a] === squares[c]) {
      return squares[a];
    }
  }
  return null;
}

export default Board;
