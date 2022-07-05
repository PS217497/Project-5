
let langu = "nl";

export function getBeschrijving(callback){
    if (callback) {
        callback(langu)
    } else {
        return langu    
    }
}
export function setBeschrijving(value){
    langu = value;
    console.log(value);
}