import cards

class SimpleCard(cards.Card):
    """Card class that implements a very simple comparison."""

    def __cmp__(self, other):
        """Compare two cards ignoring suit."""
        if self.rank > other.rank: return 1
        elif self.rank < other.rank: return -1
        else: return 0

class SimpleDeck(cards.Deck):
    """A simple Deck class."""

    def __init__(self):
        """Create a new SimpleDeck instance."""
        self.cards = []
        for suit in range(4):
            for rank in range(1, 14):
                self.cards.append(SimpleCard(suit, rank))
        
def main():
    """Main program function"""
    deck = SimpleDeck()
    deck.shuffle()
    computerCard = deck.popCard()
    go = raw_input('Press  to draw a card...')
    humanCard = deck.popCard()
    print "Human draws: %s" % humanCard
    print "Computer draws: %s\n" % computerCard
    if humanCard > computerCard:
        print "Human wins."
    elif humanCard < computerCard:
        print "Computer wins."
    else:
        print "It's a draw."

main()
