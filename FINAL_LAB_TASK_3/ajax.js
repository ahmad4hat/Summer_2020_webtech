const ajaxPost = (url, obj) => {
  const xhttp = new XMLHttpRequest();
  xhttp.open("POST", url, true);
  xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  const data = new FormData();
  for (const key in obj) {
    data.append(key, obj[key]);
  }
};
