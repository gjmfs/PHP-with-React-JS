import axios from "axios";
import { useState } from "react";

export const Home = () => {
  const [input, setInput] = useState({});

  const handleChange = (e) => {
    const name = e.target.name;
    const value = e.target.value;
    setInput((values) => ({ ...values, [name]: value }));
  };

  const handleSubmit = async (e) => {
    e.preventDefault();
    axios.post("http://localhost:3001/api/user/save", input);
    console.log(input);
  };

  return (
    <div className="Home">
      <div className="container m-4">
        <form
          method="POST"
          className="row row-cols-2 gap-2"
          onSubmit={handleSubmit}
        >
          <div className="col">Name:</div>
          <input
            type="text"
            name="name"
            className="col"
            onChange={handleChange}
          />
          <div className="col">E-mail:</div>
          <input
            type="email"
            name="email"
            className="col"
            onChange={handleChange}
          />
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  );
};
