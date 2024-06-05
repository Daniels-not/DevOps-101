// imports

const greeting = require("./index")

test('Devuelve "Hola Mundo con un emoji"', () => {
    expect(greeting()).toBe("Hola Mundo 🔥");
});