
for (let i = 1; i <= 50; i++) {
    let five = 5;
    let seven = 7;

    let first = i % five;
    let second = i % seven;

    if(first == 0 && second == 0 ){
        console.log("данет \n");
    } else if(second == 0){
        console.log("нет \n");
    } else if (first == 0) {
        console.log("да \n");
    } else {
        console.log(i + " \n");
    }
}
