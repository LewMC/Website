function callAPI(platform) {
    const requestOptions = {
        method: "GET",
        redirect: "follow"
    };

    fetch('/api/'+platform, requestOptions)
        .then((response) => response.text())
        .then((result) => console.log(result))
        .catch((error) => console.error(error));
}