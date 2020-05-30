function setState (objectName, state) {
    localStorage.setItem(objectName, JSON.stringify(state));
}
const getState = (objectName, state) => {
    localStorage.getItem([objectName], JSON.parse(state));
}