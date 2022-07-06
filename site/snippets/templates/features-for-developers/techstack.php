<section class="mb-42" id="techstack">

  <?php snippet('hgroup', [
	'title' => 'A reliable tech stack',
	'subtitle' => 'Performant, well-tested and cost-effective',
  ]) ?>

  <div class="columns text-sm" style="--columns-md: 2; --columns: 4; --gap: var(--spacing-1)">
	<article class="p-6 bg-light">
	  <figure class="mb-6" style="height: 3rem">
		<?= image('php.svg')->read() ?>
	  </figure>
	  <h3 class="font-bold">Modern PHP</h3>
	  <p class="color-gray-700">Kirby is built on our own PHP micro-framework and can be combined with your favorite PHP libraries. Tested and continously improved over more than 9 years, it fully leverages the power of modern PHP. With over 4,800 automated tests with a code coverage of 94.9% across the entire CMS backend and more than 70 releases since 3.0, we invest heavily into the quality of our foundation.</p>
	</article>
	<article class="p-6 bg-light">
	  <figure class="mb-6" style="height: 3rem">
		<?= image('vue.svg')->read() ?>
	  </figure>
	  <h3 class="font-bold"><a href="/docs/reference/plugins/ui">Admin interface framework &rarr;</a></h3>
	  <p class="color-gray-700">Our admin interface is built on Vue.js. It's a playground for your ideas. Extend it with plugins and make it your own with the full power of Vue and an incredibly powerful backend.</p>
	</article>
	<article class="p-6 bg-light">
	  <figure class="mb-6" style="height: 3rem">
		<?= image('html5.svg')->read() ?>
	  </figure>
	  <h3 class="font-bold">Your frontend</h3>
	  <p class="color-gray-700">Every project is different, every team and freelancer have their own tools and workflows. With Kirby, you use your own frontend code, your own build process, your own framework. Kirby stays out of your way.</p>
	</article>
	<article class="p-6 bg-light">
	  <figure class="mb-6" style="height: 3rem">
		<?= image('github.svg')->read() ?>
	  </figure>
	  <h3 class="font-bold"><a href="https://github.com/getkirby">Sustainable open-source &rarr;</a></h3>
	  <p class="color-gray-700">Yes, Kirby has a commercial license that's been keeping us running since 2012. But we believe in the transparency of open-source. Kirby's complete code base is available on GitHub, not hidden behind a paywall. No obfuscation, no secrets. You only need to pay when you're actually going live with a Kirby project.</p>
	</article>
  </div>
</section>
