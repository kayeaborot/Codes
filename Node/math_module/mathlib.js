module.exports = function (){
  return {
    add: function(num1, num2) { 
      console.log("The sum is: ", num1 + num2);
      return this;
    },
    multiply: function(num1, num2) {
      console.log("The product is: ", num1 * num2);
      return this;
    },
    square: function(num) {
      console.log("The square is: ", num * num);
      return this;
    },
    random: function(num1, num2) {
      console.log("The number is: ", Math.floor(Math.random() * (num2 - num1) + num1));
      return this;
    }
  }
};