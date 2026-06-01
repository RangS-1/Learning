import React from 'react';

class NoteSearch extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      searchValue: ''
    };

    this.onSearchChangeHandler = this.onSearchChangeHandler.bind(this);
    this.onClearSearchHandler = this.onClearSearchHandler.bind(this);
  }

  onSearchChangeHandler(event) {
    const searchValue = event.target.value;
    this.setState({ searchValue });
    this.props.onSearch(searchValue);
  }

  onClearSearchHandler() {
    this.setState({ searchValue: '' });
    this.props.onSearch('');
  }

  render() {
    return (
      <div className="note-search" data-testid="note-search">
        <input
          type="text"
          placeholder="Cari catatan..."
          value={this.state.searchValue}
          onChange={this.onSearchChangeHandler}
          data-testid="note-search-input"
        />
        {this.state.searchValue && (
          <button
            className="note-search__clear"
            onClick={this.onClearSearchHandler}
            type="button"
            data-testid="note-search-clear"
          >
            ×
          </button>
        )}
      </div>
    );
  }
}

export default NoteSearch;
