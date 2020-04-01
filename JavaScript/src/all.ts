class init {
    public unsortedArray: number[]
    public sortedArray: number[]

    constructor() {
        this.unsortedArray = this.generateRamdomArray()
        this.logOutput('Original Array', this.unsortedArray)
    }

    public generateRamdomArray = (): number[] => {
        let arrayLength: number = Math.floor(Math.random() * (Math.random() * 100))
        let arrayOutput: number[] = new Array();
        for (let i = 0; i < arrayLength; i++) {
            arrayOutput.push(Math.floor(Math.random() * 100))
        }
        return arrayOutput;
    }

    public logOutput = (name: String, array: any): void => {
        console.log('========== ' + name + ' ==========\n')
        console.log(array)
        console.log('\n========== ' + name + ' ==========\n')
    }

    public bubbleSort = (): number[] => {
        let array = this.unsortedArray;
        let i: number
        let j: number
        for (i = 0; i < array.length - 1; ++i) {
            for (j = 0; j < array.length - i - 1; ++j) {
                if (array[j] > array[j + 1]) {
                    let temp = array[j]
                    array[j] = array[j + 1]
                    array[j + 1] = temp
                }
            }
        }
        this.logOutput('Bubble Sort', array)
        return array
    }
}

var classReal = new init();
classReal.bubbleSort();