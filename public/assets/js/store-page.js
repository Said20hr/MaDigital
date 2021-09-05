//select all logic
const stores = document.querySelectorAll(".select-store__store");
const selectAllcheckbox = document.querySelector("#customCheck1");
const selectStoreSpan = document.querySelector(".select-store__title span");

selectAllcheckbox.addEventListener(
    "change",
    ({ target: { checked: isChecked } }) => {
        for (let store of stores) {
            if (!isChecked) {
                store.className = "select-store__store";
            } else {
                store.className =
                    "select-store__store select-store__store--selected";
            }
        }
    }
);

const toogleIndexNode = store => {
    store.classList.toggle("select-store__store--selected");
    const selectedStores = document.querySelectorAll(
        ".select-store__store--selected"
    );
    //update the length of selected stores
    selectStoreSpan.textContent = selectedStores.length;
};

for (let store of stores) {
    store.addEventListener("click", () => {
        toogleIndexNode(store);
    });
}

//stores search
const searchInput = document.querySelector(
    ".select-store__search-containner input"
);
const storesContainner = document.querySelector(
    ".select-store__stores-containner"
);

searchInput.addEventListener("keyup", ({ target: { value } }) => {
    let newStoresList = [];
    for (let store of stores) {
        if (store.id.includes(value)) newStoresList.push(store);
    }

    if (newStoresList.length === 0) newStoresList = stores;

    removeAllChildNodes(storesContainner);
    addAllChildNodes(storesContainner, newStoresList);
});

function removeAllChildNodes(parent) {
    while (parent.firstChild) {
        parent.removeChild(parent.firstChild);
    }
}

function addAllChildNodes(parent, nodesList) {
    const myList = nodesList;
    while (myList.length > 0) {
        parent.appendChild(myList[0]);
        myList.shift();
    }
}
