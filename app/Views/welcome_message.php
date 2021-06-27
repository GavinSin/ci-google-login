<?= $this->extend("layouts/default") ?>

<!-- content -->
<?= $this->section("content") ?>

<section>
	<?= $this->include("partials/heroe") ?>
</section>

<section>
	<h1>About this page</h1>
	<p>The page you are looking at is being generated dynamically by CodeIgniter.</p>
	<p>If you would like to edit this page you will find it located at:</p>
	<pre><code>app/Views/welcome_message.php</code></pre>
	<p>The corresponding controller for this page can be found at:</p>
	<pre><code>app/Controllers/Home.php</code></pre>
</section>

<div class="further">
	<section>
		<h1>Go further</h1>
		<p>The User Guide contains an introduction, tutorial, a number of "how to"
			guides, and then reference documentation for the components that make up
			the framework. Check the <a href="https://codeigniter4.github.io/userguide" target="_blank">User Guide</a> !</p>
		<p>CodeIgniter is a community driven project and accepts contributions
			of code and documentation from the community. Why not
			<a href="https://codeigniter.com/en/contribute" target="_blank">
				join us</a> ?
		</p>
	</section>
</div>

<?= $this->endSection() ?>