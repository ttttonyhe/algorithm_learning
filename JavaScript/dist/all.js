var init = /** @class */ (function () {
    function init() {
        var _this = this;
        this.generateRamdomArray = function () {
            var arrayLength = Math.floor(Math.random() * (Math.random() * 100));
            var arrayOutput = new Array();
            for (var i = 0; i < arrayLength; i++) {
                arrayOutput.push(Math.floor(Math.random() * 100));
            }
            return arrayOutput;
        };
        this.logOutput = function (name, array) {
            console.log('========== ' + name + ' ==========\n');
            console.log(array);
            console.log('\n========== ' + name + ' ==========\n');
        };
        this.bubbleSort = function () {
            var array = _this.unsortedArray;
            var i;
            var j;
            for (i = 0; i < array.length - 1; ++i) {
                for (j = 0; j < array.length - i - 1; ++j) {
                    if (array[j] > array[j + 1]) {
                        var temp = array[j];
                        array[j] = array[j + 1];
                        array[j + 1] = temp;
                    }
                }
            }
            _this.logOutput('Bubble Sort', array);
            return array;
        };
        this.unsortedArray = this.generateRamdomArray();
        this.logOutput('Original Array', this.unsortedArray);
    }
    return init;
}());
var classReal = new init();
classReal.bubbleSort();
