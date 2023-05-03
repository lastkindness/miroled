// eslint-disable-next-line import/no-cycle

export default function projectsTemplate(data, section) {

  const item = `

  <article class="project__item" data-id="${data.id}">
    <a href="${data.url}">
      <figure class="project-image">
        <ul class="tags">
          ${data.cat_names.map((tag) => `<li class="tags__item ${data.class}">${tag}</li>`).join('')}
        
        </ul>
        ${data.image ? `${data.image}` : ''}
      </figure>
      <div class="project__item-description">
        ${data.title ? `<h3 class="project__item-title">${data.title}</h3>` : ''}
        ${data.excerpt ? `<p class="project__item-text">${data.excerpt}</p>` : ''}
      </div>
     
    </a>
  </article>`;
  section.append(item);
}
