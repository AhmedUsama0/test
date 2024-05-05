const getFirstChar = (string) => {
    const firstChar = string.charAt(0);
    const firstCharToUpper = () => {
        return firstChar.toUpperCase();
    }
    return firstCharToUpper;
}


const firstCharToUpper = getFirstChar('ahmed');

