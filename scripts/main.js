let postsData = "";
const postsContainer = document.querySelector(".posts-container");
fetch(
  "https://gist.githubusercontent.com/jemimaabu/564beec0a30dbd7d63a90a153d2bc80b/raw/0b7e25ba0ebee6dbba216cfcfbae72d460a60f26/tutorial-levels"
).then(async (response) => {
  postsData = await response.json();
  postsData.map((post) => createPost(post));
});
const createPost = (postData) => {
  const { title, link, image, categories } = postData;
  const post = document.createElement("div");
  post.className = "post";
  post.innerHTML = ` 
<a class="post-preview" href="${link}" target="_blank"> 
<img class="post-image" src="${image}"> 
</a> 
<div class="post-content"> 
<p class="post-title">${title}</p> 
<div class="post-tags"> 
${categories
            .map((category) => {
              return '<span class="post-tag">' + category + "</span>";
            })
            .join("")} 
</div> 
</div> 
`;
  postsContainer.append(post);
};