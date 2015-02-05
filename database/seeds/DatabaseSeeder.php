<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('FaqsTableSeeder');
	}

}

class FaqsTableSeeder extends Seeder {

    protected $questions = [
        'What are Avitez bottles made from?',
        'Why use Plants and not Oil?',
        'Why choose Avitez eco-friendly bottle?',
        'What is the mineral content of Avitez water?',
        'Why is Mineral water so much better than Purified water?',
        'What are the greenhouse gas savings if we use Avitez bottles instead of traditional plastic bottles?',
        'How does PLA compare against other plastic materials when considering non-renewable energy use?',
        'How do Avitez water bottles compare to glass water bottles?',
        'Do Avitez bottles emit BPA?',
        'Is Avitez water tested regularly?'
    ];

    protected $answers =[
        '<p>Avitez bottles are made from field corn or other sugar based plants.  These plants are fermented to extract natural sugars and starch.  Then follows the process of separation and polymerization to develop a resin like substance called PLA or polylactic acid.</p>
            <div class="row">
            <div class="col-md-6"><img class="img-responsive" src="images/faqs/faq-1-pic-1.jpg" alt="" /></div>
            <div class="col-md-6">
                <p>The manufacturing process of PLA bottles does not undergo any chemical treatment making it completely safe for storing water. We use the world renown Ingeo PLA resin manufactured by Natureworks LLC.</p>
                <p>Our footprint from production through to disposal provides the most environmentally friendly solution for bottled water available today.</p>
            </div> 
        </div>',

        '<p>Oil is scarce and even if you recycle its bottles, it will always end up in landfill.</p>
		<p>Plants used for PLA production can be regrown in 100 days.  Plants also consume CO2 and replenish O2 thereby reducing greenhouse gases.</p>
		<p>Avitez bottles rely less on fossil fuels and therefore release fewer green house gases during the process of biodegradation.  The use of PLA corn bottles and other bio-plastics manufactured from agricultural by-products has reduced carbon dioxide emissions by about 40% to date.</p>',

		'<p>Modern consumer behaviour dictates a `grab and go’ culture when it comes to bottled water and its consumption has grown exponentially in Asia.  Almost without exception all of these bottles are made from oil-based PET plastic.</p>
		<p>We all know this plastic is harmful to our environment. It is made from finite resouces (ie. Oil) and does not biodegrade or compost.  Even if it makes it to a recycling plant it will still end up in landfill in time.</p>
		<h4>So why not use glass?</h4>
		<p>It’s a common mis-perception that glass is more eco-friendly than plastic bottles.  This understanding is fuelled by our belief that recycling is automatically more environmentally friendly.  In fact glass emits around 7.5 times more greenhouse gasses and over 3 times more air pollution than PLA during production.</p>
		<p>Glass is energy intensive in transportation and cleansing.  Even if no energy was required to transport and clean, glass bottles would have to be recycled more than 20 times to compete with PLA. Also, glass isn’t portable and poses a risk to it’s consumers should it break.</p>',

		'<div class="row">
			<div class="col-md-6">The mineral content of Avitez water varies as the water comes from a natural source. The approximate mineral content is shown below.</div>
			<div class="col-md-6">
			    <div class="col-md-6">Calcium</div>
			    <div class="col-md-6 text-right">0.43 mg/L</div>
			    <div class="col-md-6">tt</div>
			    <div class="col-md-6 text-right">0.13 mg/L</div>
			    <div class="col-md-6">Potassium</div>
			    <div class="col-md-6 text-right">0.90 mg/L</div>
			    <div class="col-md-6">Sodium</div>
			    <div class="col-md-6 text-right">1.02 mg/L</div>
			    <div class="col-md-6">Zinc </div>
			    <div class="col-md-6 text-right">0.02 mg/L</div>
			    <div class="col-md-6">Bicarbonate</div>
			    <div class="col-md-6 text-right">5 mg/L</div>
			</div>
		</div>',

		'<p>Mineral water comes from a natural well or spring and contains minerals such as calcium and magnesium that are essential for good health.</p>
		<p>Purified water denotes a process by which contaminants and/or minerals have been removed from any water source. It could be tap water which has been forced through a charcoal filter or water treated with ultraviolet light at the grocery store. The designation \'purified\' can be applied rather broadly.</p>
		<p>Distilled water is by definition purified, but it is not a good water for drinking. The water may have been distilled for purity and so it can absorb essential minerals out of the body as it travels through. Because of this natural tendency to pull minerals from the system, purified water is not recommended as a daily re-hydrator or replacement for other sources of water.</p>',

		'<p>Avitez bottles use NatureWorks Ingeo biopolymer.  This biopolymer is a significant step toward a better future.  Ingeo is made 100% from plants, not oil.  Production of these bottles emits 60% less greenhouse gases and uses 50% less non-renewable energy than traditional plastics.</p>',

		'<div class="col-md-6"><img class="img-responsive" src="images/faqs/faq-7-pic-1.jpg" alt="" /></div>
		<div class="col-md-6">The production of Ingeo PLA uses around half the amount of non-renewable energy than PET (Polyethylene terephthalate). PET is the oil based plastic used in traditional water bottles.</div>',

		'<p>Glass production is considerably less environmentally friendly than the production of plant-based bottles.  Glass production emits around 7.5 times more greenhouse gases and over 3 times more air pollution than PLA.</p>
		<p>It is estimated that glass bottles would have to be re-used over 20 times before they can begin to compete with PLA bottles.  And this is without taking into account the energy intensive transport required to move around the heavy glass bottles.</p>
		<p>Glass does not satisfy our modern ‘grab and go’ culture and poses a risk of breakage during shipment or use.</p>',

		'<p>Avitez bottles are 100% organic, so do not emit any chemicals including BPA into it’s water.</p>',

		'<p>Our water is tested quarterly by world renown SGS Laboratory services for quality assurance and mineral content.</p>'
    ];

    public function run()
    {
        DB::table('faqs')->delete();

        foreach ($this->questions as $index => $question) 
        {
            $faq = new \App\Faq;
            $faq->title = $question;
            $faq->body = $this->answers[$index];
            $faq->save();
        }
    }

}