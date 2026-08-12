<?php
/**
 * Template Name: Events
 * Description: ANSA Solutions Events — upcoming and past. Events are pulled
 * from the events CPT via ansa_get_events(); all query/meta logic is
 * unchanged. Local (Indiana) framing is intentionally retained here.
 *
 * @package ANSA_Solutions
 */
get_header();
?>

<main id="ds-main" class="site-main">

<!-- HERO -->
<section class="ds-hero">
	<div class="ds-hero__inner">
		<span class="ds-eyebrow">In-Person &amp; Virtual</span>
		<h1>Events</h1>
		<p class="ds-hero__lede">We bring together operations, finance, and technology leaders to explore what AI-powered automation looks like in practice. Join us at an upcoming event or browse what we've covered.</p>
	</div>
</section>

<!-- UPCOMING EVENTS -->
<section class="ds-band ds-band--paper events-section">
	<div class="ds-band__inner">
		<div class="events-section__header">
			<span class="ds-eyebrow">Upcoming</span>
			<h2>Join us next.</h2>
		</div>

		<?php $ansa_upcoming = ansa_get_events( 'upcoming' ); ?>
		<?php if ( $ansa_upcoming ) : ?>
			<div class="events-grid">
				<?php foreach ( $ansa_upcoming as $index => $event ) :
					$e_date  = get_post_meta( $event->ID, '_ansa_event_date', true );
					$e_time  = get_post_meta( $event->ID, '_ansa_event_time', true );
					$e_loc   = get_post_meta( $event->ID, '_ansa_event_location', true );
					$e_hosts = get_post_meta( $event->ID, '_ansa_event_hosts', true );
					$e_rsvp  = get_post_meta( $event->ID, '_ansa_event_rsvp_url', true );
					$e_desc  = get_the_excerpt( $event );
					$e_when  = $e_date ? wp_date( 'l, F j, Y', strtotime( $e_date ) ) : '';
					$featured = ( 0 === $index ) ? ' event-card--featured' : '';
				?>
				<div class="event-card<?php echo esc_attr( $featured ); ?>">
					<div class="event-card__badge">Upcoming</div>
					<div class="event-card__body">
						<div class="event-card__meta-row">
							<span class="event-card__date">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
								<?php echo esc_html( $e_when ); ?><?php if ( $e_time ) : ?> &nbsp;·&nbsp; <?php echo esc_html( $e_time ); ?><?php endif; ?>
							</span>
						</div>
						<h3 class="event-card__title"><?php echo esc_html( get_the_title( $event ) ); ?></h3>
						<?php if ( $e_hosts ) : ?>
							<div class="event-card__hosts"><?php echo esc_html( $e_hosts ); ?></div>
						<?php endif; ?>
						<?php if ( $e_loc ) : ?>
							<div class="event-card__location">
								<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
								<?php echo esc_html( $e_loc ); ?>
							</div>
						<?php endif; ?>
						<?php if ( $e_desc ) : ?>
							<p class="event-card__desc"><?php echo esc_html( $e_desc ); ?></p>
						<?php endif; ?>
					</div>
					<?php if ( $e_rsvp ) : ?>
						<div class="event-card__footer">
							<a href="<?php echo esc_url( $e_rsvp ); ?>" target="_blank" rel="noopener noreferrer" class="ds-btn ds-btn--primary">Request to Join</a>
						</div>
					<?php endif; ?>
				</div>
				<?php endforeach; ?>
			</div>
		<?php else : ?>
			<div class="events-empty">
				<p>We don't have an upcoming event on the calendar right now. Check back soon — or get notified below when the next one is announced.</p>
			</div>
		<?php endif; ?>
	</div>
</section>

<!-- PAST EVENTS -->
<?php $ansa_past = ansa_get_events( 'past' ); ?>
<?php if ( $ansa_past ) : ?>
<section class="ds-band ds-band--paper-2 events-section events-section--past">
	<div class="ds-band__inner">
		<div class="events-section__header">
			<span class="ds-eyebrow">Past Events</span>
			<h2>What we've covered.</h2>
		</div>

		<div class="events-grid events-grid--past">
			<?php foreach ( $ansa_past as $event ) :
				$e_date  = get_post_meta( $event->ID, '_ansa_event_date', true );
				$e_time  = get_post_meta( $event->ID, '_ansa_event_time', true );
				$e_loc   = get_post_meta( $event->ID, '_ansa_event_location', true );
				$e_hosts = get_post_meta( $event->ID, '_ansa_event_hosts', true );
				$e_when  = $e_date ? wp_date( 'l, F j, Y', strtotime( $e_date ) ) : '';
			?>
			<div class="event-card event-card--past">
				<div class="event-card__body">
					<div class="event-card__meta-row">
						<span class="event-card__date">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><rect x="3" y="4" width="18" height="18" rx="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg>
							<?php echo esc_html( $e_when ); ?><?php if ( $e_time ) : ?> &nbsp;·&nbsp; <?php echo esc_html( $e_time ); ?><?php endif; ?>
						</span>
					</div>
					<h3 class="event-card__title"><?php echo esc_html( get_the_title( $event ) ); ?></h3>
					<?php if ( $e_hosts ) : ?>
						<div class="event-card__hosts"><?php echo esc_html( $e_hosts ); ?></div>
					<?php endif; ?>
					<?php if ( $e_loc ) : ?>
						<div class="event-card__location">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/><circle cx="12" cy="10" r="3"/></svg>
							<?php echo esc_html( $e_loc ); ?>
						</div>
					<?php endif; ?>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</section>
<?php endif; ?>

<!-- NOTIFY CTA -->
<section class="ds-band ds-band--ink">
	<div class="ds-band__inner">
		<span class="ds-eyebrow">Stay in the Loop</span>
		<h2>Never miss the next one.</h2>
		<p class="ds-lede">We run events across Indiana and beyond. Get notified when the next one is announced.</p>
		<div class="ds-cta-row">
			<a class="ds-btn ds-btn--primary" href="<?php echo esc_url( home_url( '/contact/' ) ); ?>">Get notified</a>
		</div>
	</div>
</section>

</main>

<!-- Event-card component styles (self-contained; uses live style.css tokens) -->
<style>
.events-section__header { margin-bottom: 2rem; }
.events-empty {
	max-width: 780px;
	background: var(--ds-paper, #fff);
	border: 1px dashed var(--border, #e5e7eb);
	border-radius: 12px;
	padding: 2rem 1.75rem;
}
.events-empty p { margin: 0; color: var(--text-light, #6b7280); font-size: 1rem; line-height: 1.6; }
.events-grid { display: grid; grid-template-columns: 1fr; gap: 1.5rem; max-width: 780px; }
.events-grid--past { grid-template-columns: repeat(auto-fill, minmax(280px, 1fr)); max-width: 100%; }
.event-card {
	background: #fff;
	border: 1px solid var(--border, #e5e7eb);
	border-radius: 12px;
	display: flex;
	flex-direction: column;
	overflow: hidden;
	transition: box-shadow .2s ease, transform .2s ease;
}
.event-card:hover { box-shadow: 0 12px 30px rgba(0,0,0,0.1); transform: translateY(-2px); }
.event-card--featured { border-color: var(--ds-accent, #462CED); box-shadow: 0 0 0 2px rgba(70,44,237,0.1); }
.event-card--past { opacity: 0.85; }
.event-card--past:hover { opacity: 1; }
.event-card__badge {
	background: var(--ds-accent, #462CED); color: #fff; font-size: 11px; font-weight: 700;
	text-transform: uppercase; letter-spacing: 0.5px; padding: 6px 16px; align-self: flex-start;
	border-radius: 0 0 8px 0;
}
.event-card__body { padding: 1.5rem; flex: 1; display: flex; flex-direction: column; gap: 0.75rem; }
.event-card__meta-row { display: flex; align-items: center; flex-wrap: wrap; gap: 0.75rem; }
.event-card__date, .event-card__location {
	display: flex; align-items: center; gap: 6px; font-size: 13px; color: var(--text-light, #6b7280); font-weight: 500;
}
.event-card__date svg, .event-card__location svg { width: 14px; height: 14px; flex-shrink: 0; stroke: var(--ds-accent, #462CED); }
.event-card__hosts { font-size: 12px; color: var(--ds-accent, #462CED); font-weight: 700; }
.event-card__title { font-size: 1.1rem; font-weight: 900; color: var(--ds-text, #111827); margin: 0; line-height: 1.35; }
.event-card--past .event-card__title { font-size: 1rem; }
.event-card__desc { font-size: 14px; color: var(--text-light, #6b7280); line-height: 1.65; margin: 0; }
.event-card__footer { padding: 1rem 1.5rem 1.5rem; border-top: 1px solid var(--border, #e5e7eb); }
@media (max-width: 640px) { .events-grid--past { grid-template-columns: 1fr; } }
</style>

<?php get_footer(); ?>
