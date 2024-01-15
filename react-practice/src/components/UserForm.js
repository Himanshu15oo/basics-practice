import React from "react";
import useInput from "../hooks/useInput";

function UserForm() {
  const [firstName, bindFirstName, resetFirstName] = useInput("");
  const [lastName, bindLastName, resetLastName] = useInput("");

  const submitHandler = (e) => {
    e.preventDefault();
    alert(`Hello ${firstName} ${lastName}`);
    resetFirstName();
    resetLastName();
  };

  return (
    <form onSubmit={submitHandler}>
      <div>
        <label>Firstname</label>
        <input type="text" {...bindFirstName}></input>
      </div>
      <div>
        <label>Lastname</label>
        <input type="text" {...bindLastName}></input>
      </div>
      <button type="submit">Submit</button>
    </form>
  );
}

export default UserForm;
