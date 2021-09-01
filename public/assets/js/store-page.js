//select all logic
const stores = document.querySelectorAll(".select-store__store");
const selectAllcheckbox = document.querySelector("#customCheck1");
const selectStoreSpan = document.querySelector(".select-store__title span");

const toogleIndexNode = store => {
    store.classList.toggle("select-store__store--selected");
    const selectedStores = document.querySelectorAll(
        ".select-store__store--selected"
    );
    const index = Array.from(selectedStores).indexOf(store);
    store.childNodes[1].textContent = index + 1;
    //update the length of selected stores
    selectStoreSpan.textContent = selectedStores.length;
};

selectAllcheckbox.addEventListener("change", e => {
    for (let store of stores) {
        toogleIndexNode(store);
    }
});

for (let store of stores) {
    store.addEventListener("click", () => {
        toogleIndexNode(store);
    });
}
