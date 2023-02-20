function findN(arr){
    return arr.length;
}
function findSum(arr){
    let sum = 0;
    for (let i = 0; i < arr.length; i++){
        sum += arr[i];
    }
    return sum;
}
function findMean(arr){
    return findSum(arr)/findN(arr);
}
function findMedian(arr){
    let sortArr = arr.sort(function(a, b){return a-b});
    let arrN = findN(sortArr);
    if (arrN % 2 === 0){
        return (sortArr[Math.floor((arrN-1)/2)] + sortArr[Math.ceil((arrN-1)/2)])/2;
    }
    else{
        return sortArr[(arrN-1)/2];
    }
}
function findMode(arr){
    const map = new Map();
    let currentMode;
    let freq = 0;
    for (let i = 0; i < arr.length; i++){
        if (map.get(arr[i])) {
            map.set(arr[i],map.get(arr[i]) + 1);
        }else{
            map.set(arr[i], 1);
        }
        if (map.get(arr[i]) > freq){
            currentMode = arr[i];
            freq = map.get(arr[i]);
        }
    }
    return currentMode;
}
function findMax(arr){
    let currMax = arr[0];
    for (let i = 1; i < arr.length; i++){
        if (arr[i] > currMax){
            currMax = arr[i];
        }
    }
    return currMax;
}
function findMin(arr){
    let currMin = arr[0];
    for (let i = 1; i < arr.length; i++){
        if (arr[i] < currMin){
            currMin = arr[i];
        }
    }
    return currMin;
}
function findRange(arr){
    return findMax(arr) - findMin(arr);
}
function findVariance(arr){
    let sum = 0;
    let mean = findMean(arr);
    for (let i = 0; i < arr.length; i++){
        sum += Math.pow(arr[i] - mean ,2);
    }
    return sum/(findN(arr)-1);
}
function findStandardDeviation(arr){
    return Math.pow(findVariance(arr), 0.5);
}