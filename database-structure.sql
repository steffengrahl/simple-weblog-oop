CREATE TABLE IF NOT EXISTS categories
(
    id         INTEGER PRIMARY KEY AUTOINCREMENT,
    name       VARCHAR(128),
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE IF NOT EXISTS posts
(
    id          INTEGER PRIMARY KEY AUTOINCREMENT,
    title       VARCHAR(128),
    content     TEXT,
    category_id INTEGER,
    created_at  DATETIME,
    updated_at  DATETIME
);

CREATE TABLE IF NOT EXISTS tags
(
    id         INTEGER PRIMARY KEY AUTOINCREMENT,
    name       VARCHAR(128),
    created_at DATETIME,
    updated_at DATETIME
);

CREATE TABLE IF NOT EXISTS tags_to_posts
(
    tag_id INTEGER,
    post_id INTEGER
);
