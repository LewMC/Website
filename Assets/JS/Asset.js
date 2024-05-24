function getModrinthDescription(asset) {
    const requestOptions = {
        method: "GET",
        redirect: "follow"
    };

    fetch('/api/modrinth?description='+ asset)
        .then((response) => response.text())
        .then((result) => console.log(result))
        .catch((error) => console.error(error));
}