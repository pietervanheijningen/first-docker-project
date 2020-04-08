const express = require("express");
let app = express();

app.use(function (req, res, next) {
    res.header("Access-Control-Allow-Origin", "*");

    next();
});

app.get("/", (req, res) => {
    res.status(200).json({
        status: "working!",
        randNumber: Math.random()
    });
});

app.listen(80, () => {
    console.log("server is running on port 80")
});
